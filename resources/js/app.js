import React from 'react';
import ReactDOM from 'react-dom';

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

import './bootstrap';

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Example from './components/Example';
import './components/healthyhub';
import './components/HelloReact';
import SearchBar from './components/searchbar';
import UserDropdown from './components/User';
import SideBar from './components/sidebar';
import './components/LogIn-SignUp';
import LogInCard from './components/login_card';
import SignUpCard from './components/signup_card';
import PictureNav from './components/picture-nav';
import PopularBox from './components/popular-box';
import PostCreate from './components/Post-Create';
import PostDisplay from './components/Post-Display';
import SideBarAdmin from './components/sidebar-admin';
import PageNav from './components/page-nav';
import CreateInput from './components/create-input';
import HotNewTop from './components/hot-new-top';
import ProfileBox from './components/profile-box';
import Post1 from './components/post1';

// rendering imports
if (document.getElementById("login-card")) {
	const Index = ReactDOM.createRoot(document.getElementById("login-card"));

	Index.render(
		<React.StrictMode>
			<LogInCard />
		</React.StrictMode>
	);
}

if (document.getElementById("signup-card")) {
	const Index = ReactDOM.createRoot(document.getElementById("signup-card"));

	Index.render(
		<React.StrictMode>
			<SignUpCard />
		</React.StrictMode>
	);
}

if (document.getElementById("lisu")) {
	const Index = ReactDOM.createRoot(document.getElementById("lisu"));

	Index.render(
		<React.StrictMode>
			<LogInSignUp />
		</React.StrictMode>
	);
}

if (document.getElementById("udd")) {
	const Index = ReactDOM.createRoot(document.getElementById("udd"));

	Index.render(
		<React.StrictMode>
			<UserDropdown />
		</React.StrictMode>
	);
}

if (document.getElementById("search-bar")) {
	const Index = ReactDOM.createRoot(document.getElementById("search-bar"));

	Index.render(
		<React.StrictMode>
			<SearchBar />
		</React.StrictMode>
	);
}

if (document.getElementById("side-bar")) {
	const Index = ReactDOM.createRoot(document.getElementById("side-bar"));

	Index.render(
		<React.StrictMode>
			<SideBar />
		</React.StrictMode>
	);
}

if (document.getElementById("side-bar-admin")) {
	const Index = ReactDOM.createRoot(document.getElementById("side-bar-admin"));

	Index.render(
		<React.StrictMode>
			<SideBarAdmin />
		</React.StrictMode>
	);
}

if (document.getElementById("thh")) {
	const Index = ReactDOM.createRoot(document.getElementById("thh"));

	Index.render(
		<React.StrictMode>
			<Thehealthyhub />
		</React.StrictMode>
	);
}

if (document.getElementById("pic-nav")) {
	const Index = ReactDOM.createRoot(document.getElementById("pic-nav"));

	Index.render(
		<React.StrictMode>
			<PictureNav />
		</React.StrictMode>
	);
}

if (document.getElementById("pop-box")) {
	const Index = ReactDOM.createRoot(document.getElementById("pop-box"));

	Index.render(
		<React.StrictMode>
			<PopularBox />
		</React.StrictMode>
	);
}

if (document.getElementById("post-create")) {
	const Index = ReactDOM.createRoot(document.getElementById("post-create"));

	Index.render(
		<React.StrictMode>
			<PostCreate />
		</React.StrictMode>
	);
}

if (document.getElementById("post-display")) {
	const Index = ReactDOM.createRoot(document.getElementById("post-display"));

	Index.render(
		<React.StrictMode>
			<PostDisplay />
		</React.StrictMode>
	);
}

if (document.getElementById("page-nav")) {
	const Index = ReactDOM.createRoot(document.getElementById("page-nav"));

	Index.render(
		<React.StrictMode>
			<PageNav />
		</React.StrictMode>
	);
}

if (document.getElementById("create-input")) {
	const Index = ReactDOM.createRoot(document.getElementById("create-input"));

	Index.render(
		<React.StrictMode>
			<CreateInput />
		</React.StrictMode>
	);
}

if (document.getElementById("hot-new-top")) {
	const Index = ReactDOM.createRoot(document.getElementById("hot-new-top"));

	Index.render(
		<React.StrictMode>
			<HotNewTop />
		</React.StrictMode>
	);
}

if (document.getElementById("profile-box")) {
	const Index = ReactDOM.createRoot(document.getElementById("profile-box"));

	Index.render(
		<React.StrictMode>
			<ProfileBox />
		</React.StrictMode>
	);
}

if (document.getElementById("post1")) {
	const Index = ReactDOM.createRoot(document.getElementById("post1"));

	Index.render(
		<React.StrictMode>
			<Post1 />
		</React.StrictMode>
	);
}


// resources/js/app.js
import 'font-awesome/css/font-awesome.css';




// document.addEventListener('DOMContentLoaded', function() {
//   const container = document.getElementById('search-bar-container');
//   ReactDOM.render(<SearchBar />, container);
// });



// window.$ = window.jQuery = require('jquery');


// Bar Chart
// Sample data for reports and approval requests received
var data = {
    labels: ['Reports', 'Approval Requests'],
    datasets: [{
        label: 'Number of Requests',
        data: [25, 15], // Replace with your actual data
        backgroundColor: [
            'rgba(75, 192, 192, 0.7)', // Color for Reports
            'rgba(255, 99, 132, 0.7)'  // Color for Approval Requests
        ],
        borderWidth: 1
    }]
};

var options = {
    scales: {
        y: {
            beginAtZero: true,
            ticks: {
                stepSize: 5, // Customize the step size on the y-axis
                color: 'black' // Set the text color to black
            }
        },
        x: {
            ticks: {
                color: 'black' // Set the text color on the x-axis to black
            }
        }
    },
    plugins: {
        legend: {
            labels: {
                color: 'black' // Set the label color to black
            }
        }
    }
};

// Create a bar chart
var ctx = document.getElementById('barChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
});
