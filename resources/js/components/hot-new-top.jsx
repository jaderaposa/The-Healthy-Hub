import React from "react";
import ReactDOM from 'react-dom/client'; 

export const HotNewTop = () => {
    return (
        <div className="hot-new-top">
            <div className="group">
                <div className="overlap-group">
                    <div className="text-wrapper">Hot</div>
                    <img className="fire" alt="Fire" src="img/fire-1.png" />
                    <div className="div">New</div>
                    <img className="stars" alt="Stars" src="img/stars-1.png" />
                    <div className="text-wrapper-2">Top</div>
                    <img className="arrow-up" alt="Arrow up" src="img/arrow-up-1.png" />
                </div>
            </div>
        </div>
    );
};



export default HotNewTop;

if (document.getElementById('hot-new-top')) {
  const Index = ReactDOM.createRoot(document.getElementById("hot-new-top"));

  Index.render(
      <React.StrictMode>
          <HotNewTop/>
      </React.StrictMode>
  )
}
