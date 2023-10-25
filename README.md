# GESHorario     -    Gestion de Horarios IFD PAG
   Version 1.0.0

## Para Crear el proyecto en PC local 
  
- Desde el cmd en la carpeta 'c:xampp\htdocs':
  
  1- git clone https://github.com/rogniella/geshorario.git


- Abrir xamp, en config de apache entrar a php.ini y buscar: ';extension:zip' y borrar el ';' y guardar.


- ir a la Carpeta generada GesHorario, abrir cmd y correr para que se genere el proyecto:
  
  1- escribir 'composer install'.

  2- escribir 'npm install'.

  3- escribir 'copy .env.example .env'.

  4- escribir 'php artisan key:generate'.

  5- crear una base de datos llamada geshorario e insertar los codigos SQL que están en la carpeta del proyecto.

  6- escribir 'npm run build'.

  7- y para correr el servir escribir 'php artisan serve'.