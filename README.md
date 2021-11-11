<h2>Intergration of Laravel with Google authentications and the applied of Restful API in gathering Data</h2>

1. Run XAMPP
2. Configure extra information in .env files

<p>GOOGLE_CLIENT_ID=Google Client ID(provided)</p>
<p>GOOGLE_CLIENT_SECRET=Client Secrets(provided)</p>
<p>GOOGLE_REDIRECT=http://localhost:8000/callback</p>
<p>Api_ISS=https://api.wheretheiss.at/v1/satellites/25544/positions?timestamps=</p>
<p>Time=https://showcase.api.linx.twenty57.net/UnixTime/tounixtimestamp?datetime=</p>
<p>Location=https://api.wheretheiss.at/v1/coordinates/</p>
<p>Maps=https://maps.google.com/maps?q=</p>

3. Run the web applications 

<p>change your database directory</p>
<p>php artisan migrate</p>
<p>php artisan serve</p>
<p>go to http://localhost:8000/login</p>

4. Enter the date in Year/Month/Day Hour:Minutes:Seconds

<p>Microservice Arcithecture</p> 
<img src="https://github.com/muhdizuddin/maybank/blob/master/Untitled%20Diagram.jpg" >

<h2>Front End</h2>
By using bootstrap, fontawesome and Laravel blade in creating front end.I also use google authentications where information about users is kept inside mysql and backup by google cloud storage

<h2>Back End</h2>
I fetch information based on live data that created and send through json format. I use post and get API in order to fetch realtime data. I also use laravel controller, models and rest API in interacting with the data. First, i ask user to input the date that they wanted and the date is changed into timestamps and get the exact position of ISS through coordinates given. 
