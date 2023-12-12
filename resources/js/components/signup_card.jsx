// import React, { useState } from "react";
// import ReactDOM from "react-dom/client";
// import axios from "axios";

// export const SignUpCard = () => {
//     const [username, setUsername] = useState("");
//     const [email, setEmail] = useState("");
// 	const [password, setPassword] = useState("");
// 	const [confirmPassword, setConfirmPassword] = useState("");

// 	const handleSubmit = async (event) => {
// 		event.preventDefault();

// 		const response = await fetch("http://localhost:8000/api/register", {
// 			method: "POST",
// 			headers: {
// 				"Content-Type": "application/json",
// 			},
// 			body: JSON.stringify({
// 				username,
// 				email,
// 				password,
// 				confirmPassword,
// 			}),
// 		});

// 		const data = await response.json();
// 		console.log(data);
// 	};


// 	return (
// 		<form onSubmit={handleSubmit}>
// 			<div className="signup-card">
// 				<div className="group">
// 					<div className="overlap">
// 						<img
// 							className="user"
// 							alt="User"
// 							src="img/user-112-512-1.png"
// 						/>
// 						<div className="div">Sign Up</div>
// 						<input
// 							className=""
// 							placeholder="Username"
// 							value={username}
// 							onChange={(e) => setUsername(e.target.value)}></input>
// 						<input
// 							className="div-wrapper"
// 							placeholder="Email"
// 							value={email}
// 							onChange={(e) => setEmail(e.target.value)}></input>
// 						<input
// 							type="password"
// 							className="overlap-2"
// 							placeholder="Password"
// 							value={password}
// 							onChange={(e) => setPassword(e.target.value)}></input>
// 						<input
// 							type="password"
// 							className="overlap-group"
// 							placeholder="Confirm Password"
// 							value={confirmPassword}
// 							onChange={(e) => setConfirmPassword(e.target.value)}></input>
// 						<div className="overlap-group-wrapper">
// 							<div className="overlap-group-2">
// 								<button
// 									type="submit"
// 									className="text-wrapper-3">
// 									Enter
// 								</button>
// 							</div>
// 						</div>
// 						<div className="text-wrapper-2">Back</div>
// 					</div>
// 				</div>
// 			</div>
// 		</form>
// 	);
// };

// export default SignUpCard;

// if (document.getElementById("signup-card")) {
// 	const Index = ReactDOM.createRoot(document.getElementById("signup-card"));

// 	Index.render(
// 		<React.StrictMode>
// 			<SignUpCard />
// 		</React.StrictMode>
// 	);
// }
