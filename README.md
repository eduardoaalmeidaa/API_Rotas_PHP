# 1 Rodar a migrate
php artisan migrate 

# 2A Opção 1  Rodar os seeds individualmente
php artisan db:seed veicletype 
php artisan db:seed veicle 
php artisan db:seed subsidiary
php artisan db:seed revisions 
php artisan db:seed person_type
php artisan db:seed person
php artisan db:seed driver
php artisan db:seed rent  

# 2B Opção 2 Rodar tudo de uma vez 
php artisan db:seed

composer dumpautoload 

php artisan serve 
3. 
