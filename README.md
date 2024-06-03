## Setup

If you've just downloaded the code, congratulations!!

To get it working, follow these steps:

### Download Composer dependencies

Make sure you have [Composer installed](https://getcomposer.org/download/)
and then run:

```
composer install
```

### Database Setup

The code comes with a `compose.yaml` file (for Docker) and we recommend using
Docker to boot a database container. You will still have PHP installed
locally, but you'll connect to a database inside Docker. This is optional,
but I think you'll love it!

First, make sure you have [Docker installed](https://docs.docker.com/get-docker/)
and running. To start the container, run:

```
docker compose up -d
```

Next, build the database and the schema with:

```
# "symfony console" is equivalent to "bin/console"
# but its aware of your database container
symfony console doctrine:database:create --if-not-exists
symfony console doctrine:schema:create
symfony console doctrine:fixtures:load
```

If you do *not* want to use Docker, just make sure to start your own
database server and update the `DATABASE_URL` environment variable in
`.env` or `.env.local` before running the commands above. A simple way
to get the code running is to uncomment the `DATABASE_URL="sqlite...`
line in `.env` to use SQLite.

### Start the Symfony web server

You can use Nginx or Apache, but Symfony's local web server
works even better.

To install the Symfony local web server, follow
"Downloading the Symfony client" instructions found
here: https://symfony.com/download - you only need to do this
once on your system.

Then, to start the web server, open a terminal, move into the
project, and run:

```
symfony serve
```

(If this is your first time using this command, you may see an
error that you need to run `symfony server:ca:install` first).

Now check out the site at `https://localhost:8000`

Have fun!


## Objective
#### Create a dynamic category tree that can display nested categories.
#### Users should be able to expand and collapse each category to show or hide its subcategories.

## Requirements
1. Display a Category Tree: Given a list of categories, display them in a nested tree structure.
2. Expand/Collapse Functionality: Each category with subcategories should be expandable/collapsible.
3. Infinite Depth: The tree should support categories nested to any depth.
4. Initial Data Load: The tree should be populated with initial data from a JSON object. (You can structure the categories the way you want)
5. User Interaction: Users should be able to expand and collapse categories by clicking on them.
6. Dynamic Styling: Use CSS to style the tree for better visibility and usability.

## Test Steps
1. Set up the Project: Provide a basic project setup or instructions on how to run it.
2. Load and Display Data: Use your JSON data to render the category tree.
3. Implement Expand/Collapse: Add the functionality to expand and collapse categories on user interaction.
4. Style the Tree: Apply CSS to make the tree visually appealing.

## Nice to haves:
1. This can be done using vanilla js, css and html but would be great to do it using LAST stack. https://symfonycasts.com/screencast/last-stack
2. Unit, functional and e2e tests.

## Evaluation Criteria
1. Code quality
2. Testable code
3. Code that works
4. Code readability
5. Styling, ui and ux should be flawless
6. Performance
7. Test coverage
8. Error handling
