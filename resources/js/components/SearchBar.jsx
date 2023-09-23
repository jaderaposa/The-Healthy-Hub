import React from "react";
import ReactDOM from 'react-dom'; 

function SearchBar() {
  return (
  
        <div className="col-md-6 box1">
          <div className="form rectangle1">
            <i className="fa fa-search"></i>
            <input
              type="text"
              className="form-control form-input"
              placeholder="Search anything..."
            />
              <span className="left-pan">
                <a href="">
                <i className="fa fa-microphone"></i>
                </a>
              </span>
          </div>
        </div>
    
  );
}

if (document.getElementById('search-bar')) {
  ReactDOM.render(
      <React.StrictMode>
          <SearchBar/>
      </React.StrictMode>,
      document.getElementById('search-bar')
  );
}
