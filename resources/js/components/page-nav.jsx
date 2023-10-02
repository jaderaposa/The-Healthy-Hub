import React from "react";
import ReactDOM from 'react-dom/client'; 

export const PageNav = () => {
    return (
        <div className="page-nav">
            <div className="group">
                <div className="overlap">
                    <div className="text-wrapper">Posts</div>
                </div>
                <div className="navbar">
                    <div className="rectangle" />
                    <div className="div">Helpful Links</div>
                    <div className="text-wrapper-2">Community</div>
                    <div className="text-wrapper-3">Meals of the year!</div>
                    <div className="text-wrapper-4">Twitter</div>
                    <div className="text-wrapper-5">Discord</div>
                    <img className="line" alt="Line" src="img/line-12.svg" />
                    <img className="img" alt="Line" src="img/line-13.svg" />
                    <img className="line-2" alt="Line" src="img/line-14.svg" />
                    <img className="line-3" alt="Line" src="img/line-15.svg" />
                </div>
            </div>
        </div>
    );
};




export default PageNav;

if (document.getElementById('page-nav')) {
  const Index = ReactDOM.createRoot(document.getElementById("page-nav"));

  Index.render(
      <React.StrictMode>
          <PageNav/>
      </React.StrictMode>
  )
}
