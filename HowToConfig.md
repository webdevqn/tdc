#How to do
1. Go to console CMD: 
    - cd /d d:\Your xampp folder\htdocs
    - git clone git@github.com:webdevqn/tdc.git
    - cd tdc
    - composer install
2. Go to folder dayvahoc copy .env-example to be a new file named .env, if IDE does not show hidden files, go Google to do it.
3. Open Xampp and start Apache and MySQL to create a new database: tdc in unicode UTF8
4. Open .env and configurate suitably the database name, user name, password and save them: commonly, we use:
    - database: tdc
    - username: root
    - password: (do not write anything)
5. Go to Disk C > Windows > System32 > Drivers > etc.
6. Copy hosts file in etc to Desktop and configurate there, then copy back to etc folder to replace.
7. The content which is needed to change is: Add a new line to get a virtual domain tdc.vu, any name you want is ok.
    - The content to add is: 127.0.0.1  tdc.vu
8. Remember copy back to etc folder and surely overwrite it.
9. Stop Xampp
10. Go to Xampp > Apache > Conf > extra 
11. Open file v-host and configurate it.
12. Copy 2 lines into its bottom: 1 for localhost, 1 for tdc.vu

    DocumentRoot "Your Path To Xampp/xampp/htdocs"
    ServerName localhost

    DocumentRoot "Your Path To Xampp/xampp/htdocs/tdc/public"
    ServerName tdc.vu

13. Restart Xampp
14. Open browser and open tdc.vu to get the Laravel Screen