import React from "react";
import ReactDOM from 'react-dom'; // Import ReactDOM without '.client'
import "../../../public/css/style.css"; // Use an absolute path

function Thehealthyhub() {
  return (
      <h1>Hello React!</h1>
  );
}

if (document.getElementById('thh')) {
  ReactDOM.render(
      <React.StrictMode>
          <Thehealthyhub/>
      </React.StrictMode>,
      document.getElementById('thh')
  );
}
