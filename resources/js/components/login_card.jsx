// import React, { useState } from "react";
// import ReactDOM from "react-dom/client";
// import axios from "axios";

// export const LogInCard = () => {
// 	const [username, setUsername] = useState("");
// 	const [password, setPassword] = useState("");

// 	const handleSubmit = async (event) => {
// 		event.preventDefault();

// 		const response = await axios.post("http://localhost:8000/api/login", {
// 			username,
// 			password,
// 		});

// 		const data = await response.data;

// 		if (data.redirect) {
// 			window.location.href = data.redirect;
// 		}
// 	};

// 	return (
// 		<div className="login-card">
// 			<form onSubmit={handleSubmit}>
// 				<div className="group">
// 					<div className="overlap">
// 						<div className="overlap-group-wrapper">
// 							<div className="overlap-group">
// 								<div className="text-wrapper">Log In</div>
// 								<input
// 									className="div-wrapper"
// 									placeholder="Username"
// 									value={username}
// 									onChange={(e) => setUsername(e.target.value)}></input>
// 								<div className="text-wrapper-2">Forgot Password?</div>
// 								<div className="text-wrapper-3">Don't have an account?</div>
//                                 <input
//                                     type="password"
// 									className="overlap-2"
// 									placeholder="Password"
// 									value={password}
// 									onChange={(e) => setPassword(e.target.value)}></input>
// 								<img
// 									className="user"
// 									alt="User"
// 									src="img/user-112-512-1.png"
// 								/>
// 							</div>
// 						</div>
// 						<div className="overlap-wrapper">
// 							<div className="overlap-3">
// 								<button
// 									type="submit"
// 									className="text-wrapper-4">
// 									Enter
// 								</button>
// 							</div>
// 						</div>
// 					</div>
// 				</div>
// 			</form>
// 		</div>
// 	);
// };

// export default LogInCard;

// if (document.getElementById("login-card")) {
// 	const Index = ReactDOM.createRoot(document.getElementById("login-card"));

// 	Index.render(
// 		<React.StrictMode>
// 			<LogInCard />
// 		</React.StrictMode>
// 	);
// }
