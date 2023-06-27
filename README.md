# Instructions

You'll need an up to date version of Node >= 18. `nvm use stable`

To run: `composer up`

To test `composer test`

To stop `composer down`

http://localhost

### The App
You are provided with a basic application which lists owners of cars. 

An owner can have many cars but a car can only belong to one owner.

Some routes and controllers have already been configured as well as some basic tests. Some routes/tests are still incomplete.

#### View routes
`php artisan route:list`

The project is configured to use [Tailwind css](https://tailwindcss.com/) but you're welcome to use any framework of your choice if you set it up yourself.

No Javascript framework is currently configured but your welcome to use any of your choosing. You're also welcome to create a purely PHP solution if Javascript's not your thing. 

### The Task

You are required to add some of the missing features to the app. 

- Add the `owner.create` functionality. You'll need to implement `OwnerController::create()`
This should provide a form for adding a new owner. The form will have a save function. This feature should be available on the landing page.
- Add a `delete` option to the table of car owners. Clicking the link should remove the owner from the list.



