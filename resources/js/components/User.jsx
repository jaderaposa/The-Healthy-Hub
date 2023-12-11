import React from "react";
import ReactDOM from "react-dom/client";

export const UserDropdown = () => {
	return (
		<div className="box3">
			<div className="group">
				<div className="ellipse" />
				<img
					className="sort-down"
					alt="Sort down"
					src="img/sort-down.png"
                />
                <p className="jaded" alt="Username">Jaded</p>
			</div>
		</div>
	);
};

export default UserDropdown;

if (document.getElementById("udd")) {
	const Index = ReactDOM.createRoot(document.getElementById("udd"));

	Index.render(
		<React.StrictMode>
			<UserDropdown />
		</React.StrictMode>
	);
}
