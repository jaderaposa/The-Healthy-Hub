import React from "react";
import ReactDOM from 'react-dom/client'; 

export const SearchBar = () => {
  return (
  
        <div className="col-md-6 box1">
          <div className="form rectangle1">
            <input
              type="text"
              className="form-control form-input"
              placeholder="Search anything..."
            />
              <span className="left-pan">
                <a href=""><i className="fa fa-search"></i></a>
                <a href=""><i className="fa fa-microphone"></i></a>
              </span>
          </div>
        </div>
    
  );
}

export default SearchBar;

if (document.getElementById('search-bar')) {
  const Index = ReactDOM.createRoot(document.getElementById("search-bar"));

  Index.render(
      <React.StrictMode>
          <SearchBar/>
      </React.StrictMode>
  )
}
