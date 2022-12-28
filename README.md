The platform is an online service that connects Landlords who have vacant properties with individuals looking for temporary housing. It allows renters to find and book a home to stay in for a specific period of time, while also providing landlords the opportunity to earn income by renting out their unused houses.

## Html, CSS, Bootstrap, JavaScript, PHP, Laravel Framework
## Database: MySQL.

<ul>
<h2> Requirements </h2>
    <li>PHP 7.4 or higher</li>
    <li>MySQL 5.7 or higher</li>
    <li>Laravel 7.x</li>
    <h2>Installation</h2> 
    <li>Clone the repository: git clone https://github.com/shakiful/shakiful-CSE470_project_House_Rental.git</li>
    <li>Install dependencies: composer install</li>
    <li>Copy the example environment file: cp .env.example .env</li>
    <li>Generate an app key: php artisan key:generate</li>
    <li>Create a database and update the .env file with the database credentials.</li>
    <li>Migrate the database: php artisan migrate</li>
    <li>Seed the database (optional): php artisan db:seed</li>
    <li>Start the development server: php artisan serve</li>
</ul>

<ul>
<h2> Core Features: </h2>
    <li><b>Multiauth role (Admin/ Landlord/ Renter)</b></li>
    <li><b>Booking System</b> (house booking)</li>
    <li>Google Login using Socialite Package</li>
    <li>Social media sharing (available house)</li>
    <li>Filter search (search a house by their needs)</li>
    <li>Admin, Landlord, Renter Panel </li>
    <li><b>Email Verification</b>, Forget Password, Reset Passwrod</li>
    <li>Landlord and Renter are supervised by admin</li>
    <li>Booking history</li>
    <li>Cancel Booking Request</li>
    <li>Awesome overview show in <b>Dashboard</b></li>
    <li>Searching System (search by rooms, toilet, rent, area.)</li>
    <li>Category wise data handling</li>
    <li><b>Login/Register</b></li>
    <li>Update profile information</li>
</ul>


##  Activities
<ul>
<h2> Admin Panel </h2> 
    <li>See all areas and has ability to edit/delete them</li>
    <li>See all areas created by landlords and ability to delete them.</li>
    <li>Manage all landlords & renter.</li>
    <li> See all the houses information and ability to delete them</li>
    <li>See all booked houses, booking history.</li>
    <li>Admin can change his profile information & reset password</li>
    <li>Admin can share house details through social media</li>
    <li>Sign in/sign out.</li>
</ul>



<ul>
<h2> Landlord Panel </h2>
    <li>Sign in/ sign out.</li>
    <li>Landlord can change his profile information</li>
    <li>Landlord can create, edit, delete <b>Area</b> (own created)</li>
    <li>Landlord can view all areas.</li>
    <li>Landlord can handle the status of his houses (available or not available)</li>
    <li>Landlord can add, edit, delete his owm created <b>house</b>. </li>
    <li>Landlord can see his own created houses information.</li>
    <li>Can reset his password if forgotten</li>
    <li>Landlords has ability to approve and reject his pending booking requests.</li>
    <li>Landlord can share house details through social media</li>
    <li>Landlord can manage the status of his booked houses when renter leaves</li>
</ul>


<ul>
<h2> Renter Panel </h2> 
    <li>Sign in/sign out. </li>
    <li>Renter can change his profile information.</li>
    <li>Can reset password if forgotten</li>
    <li>Renter can view all areas.</li>
    <li>Renter can view all houses information</li>
    <li>Renter can apply booking for rent a house.</li>
    <li>Renter can see his own booking history</li>
    <li>Renter can see his own pending booking requests. </li>
    <li>Renter has ability to cancel his booking request</li>
    <li>Renter can get the booking approval/rejection sms in their cell phones</li>
    <li>Renter can share house details through social media.</li>

</ul>
