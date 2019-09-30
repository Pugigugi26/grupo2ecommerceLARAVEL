<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Family;


class FamiliesController extends Controller
{
    public function index()
    {
        $families = family::all();

        return view ("admin.adminFamiliesIndex", compact("families"));
    }

    public function agregar (Request $form)
    {
        $newFamily = new Family();
        $newFamily->name = $form["name"];
        $newFamily->category = $form["category"];
        $newFamily->description = $form["description"];
        $newFamily->code = $form["code"];
        $newFamily->image = $form["image"];
        $newFamily->save();

        return redirect ("admin/familias");

    }


    public function detalle ($id)
    {
        $family = Family::find($id);
        return view ("admin.adminFamiliesDetail",compact("family"));

    }

    public function borrar (Request $form)
    {   $id = $form["id"];
        $familyToDelete = Family::find($id);
        $familyToDelete->delete();
        return redirect ("admin/familias");

    }

}
