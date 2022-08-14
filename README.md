<p align="center"> 
<img src="https://user-images.githubusercontent.com/8729215/179297577-2a25b2e6-c3c7-4a4a-b43b-9a5c77b19190.png">
</p>

# Quiz System in PHP Laravel
Quiz System is a web application based on Laravel & PHP. This Quiz system allows users to solve the questions determined with the time given per question. When the quiz is over, all the answers given are compared with the correct answers and the detailed result is shown. 

## Features
- Changeable Number of Questions
- Changeable Question Time  
- Detailed Results Page
- Validation of Fields
- Custom Session Auth
- Javascript Timer and DOM manipulation
#### In Addition
- Simple and Easy-to-Edit Design
- If question time is over, no answer will be accepted  
- The answer cannot be changed when you return to the question after it's answered
- Continues with remaining time when page is refreshed
- Results are displayed one second apart and sequentially


## Installation
> Make sure you've installed Composer
- Open the folder with any editor
- Open ` .env ` and put your database details into it
- Change the questions, options and other stuff in ` database/DatabaseSeeder.php `
- Write these lines to editor's terminal or default terminal of your system (make sure you're inside of the folder)  

     1.   ` "php artisan migrate" `
     2.   ` "php artisan db:seed" `
     3.   ` "php artisan serve" `

- That's it, you're ready to use it.
## Screenshots

![Quiz System Homepage](https://user-images.githubusercontent.com/8729215/176317309-c6b47193-5cd3-4faf-a586-a33d97711a1b.png)

![Quiz System Index](https://user-images.githubusercontent.com/8729215/176316719-bbe61d6b-ec78-4699-8e25-1d990c7cab25.png)

![Questions](https://user-images.githubusercontent.com/8729215/176316737-3bf720f0-d06e-48ca-8227-8bd0198863c7.png)
