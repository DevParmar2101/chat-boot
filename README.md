```
Note: all the below command should be executed in project root folder
```

To install all the dependencies, run
> composer install

To initialize project, run
> php init 

then you will be asked 
```
Which environment do you want the application to be initialized in?

[0] Development
[1] Production

```
Type **0** and press **Enter**

Then you will be asked for confirmation
```
Initialize the application under 'Development' environment? [yes|no] 
```
Type **yes** and press **Enter** to confirm

To configure database, modify **/common/config/main-local.php** under **db**
```
'db' => [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=your_database_name',
    'username' => 'your_database_user',
    'password' => 'your_database_password',
    'charset' => 'utf8',
],
```
To import RBAC database, run
> echo yes | php yii migrate --migrationPath=@yii/rbac/migrations

For import base database, run

> echo yes | php yii migrate/up

To get future updates, run

> ./updateProject.sh