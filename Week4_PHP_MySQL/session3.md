#PHP w/ MySQL Week
####Stepping Up Our Game: Escaping and Encrypting
Encryption is necessary to protect our users' information from hackers.  Escaping also protects us from hackers.

![Bobby Tables](https://imgs.xkcd.com/comics/exploits_of_a_mom.png)
image courtesy of XKCD.com
####Escaping Malicious SQL
Also in our new-connection.php file is the `escape_this_string` method that helps us escape strings.

####md5
md5 is a cool encryption function built into PHP that gives us encrypted strings back.  Make sure your password columns in your DB tables are VARCHAR(255)!  

####Salting
md5 is cool but not everything. md5 is super popular and due to its popularity, can be reverse-engineered.  But if we use a 'salt', we can ***consistently randomize*** a bit more and secure ourselves.
