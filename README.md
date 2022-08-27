## Subscriber Installations

- Clone or Download the Repo.
- Cd into your project directory.
- Composer Install.
- Create db and set db variable in enviroment variable in file .env.
- Start server - php artisan serve --port=9000

Find subrciber innstructions in Subscriber **[Repo](https://github.com/seyiAjibola/maxibuy-publisher.git)**

- Note : Uncomment this block to save notification in DB...make sure the DB is set to the Publisher DB

    $notification = new Notification();
    $notification->topic = $response['topic'];
    $notification->message = $response['data'];
    $notification->save();
    

.
