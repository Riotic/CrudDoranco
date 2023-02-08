# CRUD_Doranco  
Crud pour doranco en symfony.  

Requirements : Vous avez besoin de docker pour utiliser cette application   
- https://docs.docker.com/desktop/install/windows-install/  
Allez dans l'application et faites:   
composer install  
Pour se connecter à la bdd via terminal:  
docker-compose exec database psql --user app --password  
Demande du password : !ChangeMe!  

Pour lancer les docker faites :  
docker-compose up -d; (pour le lancer en daemon autrement juste docker-compose up)    
une fois que vous avez terminé et si vous ne désirez pas gardé les données dans la bdd faites  
docker-composer down.  

Dans le php.ini activer les extensions :   
extension=pdo_pgsql  ligne 948  
extension=pgsql  ligne 950  

Pour lancer les migrations crées :  
symfony console make:migration
symfony console doctrine:migrations:migrate