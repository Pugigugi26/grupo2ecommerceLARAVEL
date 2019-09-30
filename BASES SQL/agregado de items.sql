UPDATE families
SET name = 'CROLL', code = 'CRL', category = 'cabezal'
WHERE id = 1;

UPDATE families
SET name = 'FEDRO', code = 'FED', category = 'empotrable'
WHERE id = 2;

UPDATE families
SET name = 'URO', code = 'URO', category = 'exterior'
WHERE id = 3;


UPDATE families
SET image = 'images/urofamily.jpg'
WHERE id = 3;

UPDATE families
SET image = 'images/crollfamily.jpg'
WHERE id = 1;


UPDATE families
SET image = 'images/fedrofamily.jpg'
WHERE id = 2;


UPDATE frames
SET name = 'Marco Redondo', image = 'images/fedromarcor.jpg', description = 'Marco redondo, giratorio, basculante', family_id = '2'
WHERE id = 1;

UPDATE frames
SET name = 'Marco Cuadrado', image = 'images/fedromarcoc.jpg', description = 'Marco cuadrado, giratorio, basculante', family_id = '2'
WHERE id = 2;

UPDATE frames
SET name = 'Marco R Recedido', image = 'images/fedromarcorr.jpg', description = 'Marco redondo recedido, giratorio, basculante', family_id = '2'
WHERE id = 3;

UPDATE frames
SET name = 'Marco C Recedido', image = 'images/fedromarcocr.jpg', description = 'Marco cuadrado recedido, giratorio, basculante', family_id = '2'
WHERE id = 4;

UPDATE frames  
SET name = 'Marco C Trimless', image = 'images/fedromarcoct.jpg', description = 'Marco cuadrado recedido, giratorio, basculante', family_id = '2'
WHERE id = 5;

UPDATE frames  
SET name = 'Marco Doble', image = 'images/fedromarcodob.jpg', description = 'Marco doble recedido, giratorio, basculante', family_id = '2'
WHERE id = 6;

UPDATE leds  
SET name = 'Fedro Mini',  power = '3,20', size = '10x10x20mm', color_t = '3000', min_flux = '450', max_flux = '600', image = 'images/fedromini32.jpg', price = 200  ,  family_id = '2'
WHERE id = 1;

UPDATE leds  
SET name = 'Fedro Mini',  power = '7,00', size = '10x10x20mm', color_t = '3000', min_flux = '600', max_flux = '800', image = 'images/fedromini7.jpg', price = 200 ,  family_id = '2'
WHERE id = 2;

UPDATE leds  
SET name = 'Fedro Small',  power = '7,00', size = '30x30x40mm', color_t = '3000', min_flux = '700', max_flux = '900', image = 'images/fedrosmall7.jpg', price = 200 ,  family_id = '2'
WHERE id = 3;

UPDATE leds  
SET name = 'Fedro Small',  power = '13,00', size = '30x30x80mm', color_t = '3000', min_flux = '1000', max_flux = '1200', image = 'images/fedrosmall13.jpg', price = 200 ,  family_id = '2'
WHERE id = 4;

UPDATE leds  
SET name = 'Fedro Medium',  power = '18,00', size = '50x50x100mm', color_t = '3000', min_flux = '1200', max_flux = '1500', image = 'images/fedro18.jpg', price = 200 ,  family_id = '2'
WHERE id = 5;

UPDATE leds  
SET name = 'Fedro Alta Potencia',  power = '33,40', size = '80x80x100mm', color_t = '3000', min_flux = '1500', max_flux = '1800', image = 'images/fedro334.jpg', price = 200,  family_id = '2'
WHERE id = 6;

UPDATE optics  
SET name = 'Fedro Narrow',  angle = '15', image = 'images/empotrablespot.jpg', price = 200,  family_id = '2'
WHERE id = 1;

UPDATE optics  
SET name = 'Fedro Med',  angle = '30', image = 'images/empotrablemed.jpg', price = 200,  family_id = '2'
WHERE id = 2;

UPDATE optics  
SET name = 'Fedro Flood', angle = '50',  image = 'images/empotrablemed.jpg', price = 200,  family_id = '2'
WHERE id = 3;

UPDATE optics  
SET name = 'Croll Super Narrow',  angle = '8', image = 'images/crollsupernarrow.jpg', price = 200,  family_id = '1'
WHERE id = 4;

UPDATE optics  
SET name = 'Croll Spot',  angle = '15', image = 'images/crollspot.jpg', price = 200,  family_id = '1'
WHERE id = 5;

UPDATE optics  
SET name = 'Croll Med',  angle = '30', image = 'images/crollmed.jpg', price = 200,  family_id = '1'
WHERE id = 6;

UPDATE optics  
SET name = 'Croll Flood', angle = '50',  image = 'images/crollflood.jpg', price = 200,  family_id = '1'
WHERE id = 7;

UPDATE optics  
SET name = 'Fedro Flood', angle = '50',  image = 'images/empotrablemed.jpg', price = 200,  family_id = '2'
WHERE id = 8;