# make migration queue
- php artisan queue:table

# create job
- php artisan make:job SendEmailUser

# final, for run
- php artisan queue:work
