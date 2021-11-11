<h2>Intergration of Laravel with Google authentications and the applied of Restful API in gathering Data</h2>

1. Run XAMPP
2. Initialize Google authentications information in .env files

<p>GOOGLE_CLIENT_ID=Google Client ID(provided)</p>
<p>GOOGLE_CLIENT_SECRET=Client Secrets(provided)</p>
<p>GOOGLE_REDIRECT=http://localhost:8000/callback</p>
<p>Api_ISS=https://api.wheretheiss.at/v1/satellites/25544/positions?timestamps=</p>
<p>Time=https://showcase.api.linx.twenty57.net/UnixTime/tounixtimestamp?datetime=</p>
<p>Location=https://api.wheretheiss.at/v1/coordinates/</p>
<p>Maps=https://maps.google.com/maps?q=</p>

3. Run the web applications 

<p>php artisan serve</p>

4. Enter the date in Year/Month/Day Hour:Minutes:Seconds
