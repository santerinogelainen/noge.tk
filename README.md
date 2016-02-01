# noge.tk

My garbage code for [noge.tk](http://noge.tk)

The code is going to use MySQL or JSON for strings and hex codes (for colors) etc.

To run on your own you need a mysql database, [jquery](https://jquery.com/) (or you can just use [jquery hosted by google](https://developers.google.com/speed/libraries/)) and [bowser](https://github.com/ded/bowser).

You also need to modify the config.php file.

#Config.php

- `IG`
-- `IGtoken` - Your [instagram token](http://instagram.pixelunion.net)
- `MYSQL`
-- `ip` - Your mysql database ip address.
-- `username` - Your mysql database user.
-- `password` - Your mysql database user password.
-- `database` - Your mysql database.
- `maintanence`
-- `boolean` - Is the website having maintenance?
-- `message` - The message to display if the website is having maintenance.
--- You can add your own. (Integer => "Message")
