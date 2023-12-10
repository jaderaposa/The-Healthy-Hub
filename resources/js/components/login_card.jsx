import React from "react";
import ReactDOM from "react-dom/client";

export const LogInCard = () => {
	return (
		<div className="login-card">
			<div className="group">
				<div className="overlap">
					<div className="overlap-group-wrapper">
						<div className="overlap-group">
							<div className="text-wrapper">Log In</div>
							<input className="div-wrapper" placeholder="Username"></input>
							<div className="text-wrapper-2">Forgot Password?</div>
							<div className="text-wrapper-3">Don't have an account?</div>
							<input className="overlap-2" placeholder="Password"></input>
							<img className="user" alt="User" src="img/user-112-512-1.png" />
						</div>
					</div>
					<div className="overlap-wrapper">
						<div className="overlap-3">
							<div className="text-wrapper-4">Enter</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	);
};

export default LogInCard;

if (document.getElementById("login-card")) {
	const Index = ReactDOM.createRoot(document.getElementById("login-card"));

	Index.render(
		<React.StrictMode>
			<LogInCard />
		</React.StrictMode>
	);
}
