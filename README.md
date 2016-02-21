# Lead Tracking
![rdoer](http://gbbs.work/images/capa.jpg)

This is a Ruby on Rails Application for Users Trace

One of the potential ways of identifying and verifying clients Where visitors to our site access and seek INFORMATION .

## Usage

### Ruby

**Ruby 2.2.3 or higher is required**

If you do not know what Ruby version you have , follow as INSTRUCTIONS . From the command line , you can check what version you are running with ` ruby -V` .

The easiest way to use the newer version of Ruby is [ CABG ] ( https://rvm.io/ ) , Which Allows you to manage multiple Ruby versions .

Install RVM by pasting the following into your terminal

    curl -L https://get.rvm.io | bash -s stable --ruby

Install dependencies

    rvm requirements

Install Ruby 2.2.3

    rvm install 2.2.3

Config
==================

### Required

| Name |  Version |
| :--: | :---: |
| [Ruby][ruby] | ruby 2.2.3 |
| [Ruby on Rails][rails] | Rails 4.2.4 or newer |

## Setup the Library Javascript

Within the project we have a folder with name /libsjs . It should be used in the web site server that will be tracked.The library, send information to the application, but for this need properly configured.

Add on each page to be traced, or a page that is fixed in the whole website.
The javascript ajaxPOST only needs to be inserted on the page that has the form

    <script src="libsjs/ajaxPOST.js"></script>
    <script src="libsjs/ajaxLibClick.js"></script>

Although the website's contact page you should put this piece of code.
It must be configured with the address of the app rails, for it to receive by POST the form data.
You must also have a "div" with id = "load_consulta" to show the result of the form submission.

    <script>
    $( "form" ).submit(function( event ) {

        var url = 'https://rdoer.herokuapp.com/contatos';
        $.get(url, function(dataReturn) {
          $('#load_consulta').html(dataReturn);
        });

    });
    </script>

To treat clicks on links, you should put this function caller in all href tags as shown below

    <a href=\"index.php\" onclick=\"buscaClick('index');\" >Home</a>

Assuming you have install RVM, you will asked to trust the .rvm file. Type y to trust it.

    ==============================================================================
    = NOTICE                                                                     =
    ==============================================================================
    = RVM has encountered a new or modified .rvmrc file in the current directory =
    = This is a shell script and therefore may contain any shell commands.       =
    =                                                                            =
    = Examine the contents of this file carefully to be sure the contents are    =
    = safe before trusting it! ( Choose v[iew] below to view the contents )      =
    ==============================================================================
    Do you wish to trust this .rvmrc file? (/tmp/community_board_rails/.rvmrc)
    y[es], n[o], v[iew], c[ancel]> y

Install the bundler gem

    gem install bundler

Install the bundled gems

    bundle install

Setup the database

    rake db:setup

Run the specs to make sure everything is working

    rake

You can start up the local server with

    rails s

Now you should be able to view the application at http://localhost:3000/ in your web browser.

## Deploy application to Heroku

[Heroku](http://www.heroku.com/) is a platform for hosting web applications. Create a free account at Heroku if you don't already have one. Once you've done that, you can create and deploy a heroku application with

    heroku create

Then push it to heroku with

    git push heroku master

Setup the database with

    heroku rake db:setup

Now access your newly created application at the URL that the heroku create command output.

To make debugging easier, you can increase the log level with

    heroku config:add LOG_LEVEL=DEBUG

To follow the logs, use

    heroku logs --tail

## Questions

If you have a question, please [create a new issue](https://github.com/tokyo-rubyist-meetup/community_board_rails/issues/new). If you have any improvements, [create a pull request](https://github.com/tokyo-rubyist-meetup/community_board_rails/pull/new).
