A complete website that supports elective recommendation system for a user.

Website has the following features:

Home page:
This is the first page which is shown to a new user. He can watch a short video about our website, and the facilities it offers. He will have to make an account and then sign in to access the elective recommendation system facility.


Authentication process:
As mentioned, a new user will have to sign up. If he is not a new user, he can just log in. There is an SQL database which stores the usernames of the registered users and their password. If the authentication parameters are correctly entered, the user can move forward. There is error checking present in this page too. It notifies the user if username/password is empty, username is not unique or if password is too short. And for storing the password, there is a POST request made and the password is encoded. XSS attack checking is done by checking if ‘script’ tag is used for user security.

Elective recommendation:
The user will have to enter his USN. Based on that, the software will give him his department and the list of the electives offered to him. Then the user will have to pick the domain he is interested in, and his favourite project along with his CGPA. There is a cosine similarity performed at the backend with the favourite project of the user, and the subjects under the specified domain.
Every subject under a domain has a cut off cgpa. So the elective having the highest cosine similarity score and having a cut off cgpa lesser than that of the user is returned.

Feedback:
We pride ourselves in the services we offer. So, its extremely important to get the feedback of the user, and to constantly improve to enhance user experience. There is a histogram feature enabled which gives us an idea of the user feedback. This is dynamic in nature and will change according to the ratings of the user. This gives a pictorial representation of the user satisfaction with our product.

Concepts implemented in the project:
1.	Hidden i-Frames:
We use the concept of hidden frames to fetch the department and the electives offered, after the user enters his cgpa.

2.	Submission throttling:
We use submission throttling in the ‘preferred domain’
We check the database after the user stops typing for one second. It will perform a keyword match with whatever the user has entered, with the domains present and return the results in the form of a drop-down menu. Example: if the user has entered ‘data’, then it will suggest ‘data science’,’data analytics’,etc.

3.	Local storage/Cache:
We use the concept of local storage(cache) to store data locally so that the number of server calls are minimum. This avoids unnecessary calls to the server when we already have the data saved or stored.

4.	Video encoding in bytes:
Instead of storing the entire video, we compress it to reduce it to bytes and then store it.

5.	XHR requests:
We perform XHR requests to make calls to the server.

6.	XHR History:
Since XHR calls don’t maintain history automatically like how i-frames do, we will have to take care of history in a special way by using a stack to keep track of what is happening.

7.	JSON format:
There is a lot of data that goes from the browser to the server and vice versa, so its easier to keep a particular format for easy parsing of data.
8.	XSS Mitigation:
We are validating the log in page to mitigate XSS attacks.

9.	Histogram feature:
This gives us a pictorial representation of the history of the user feedbacks, which will give us an idea about the user satisfaction with our product.
