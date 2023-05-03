CREATE TABLE providers(

  id INT(11) auto_increment NOT NULL,
  user_id INT(11) NOT NULL,
  names VARCHAR(200) NOT NULL,
  direction VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  web VARCHAR(255),
  product_type ENUM('Bebidas', 'Higiene personal', 'Limpieza', 'Mascotas', 'Bebes', 'Despensa') DEFAULT 'Bebidas',
  phone VARCHAR(20) NOT NULL,

  CONSTRAINT pk_providers PRIMARY KEY(id),
  CONSTRAINT fk_provider_user FOREIGN KEY(user_id) REFERENCES users(id)

)ENGINE=InnoDb;