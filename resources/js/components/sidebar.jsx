import React from 'react';
import ReactDOM from 'react-dom/client';;

export const SideBar = () => {
    return (
        <div>
            <div className="box4">
                <div className="group">
                    <div className="div">
                        <img className="fire-flame-curved" alt="Fire flame curved" src="img/fire-flame-curved-1-1.png" />
                        <div className="text-wrapper">Popular</div>
                    </div>
                    <div className="group-2">
                        <img className="house-chimney" alt="House chimney" src="img/house-chimney-1.png" />
                        <div className="text-wrapper-2">Home</div>
                    </div>
                </div>
            </div>
            <div className="line4">
                <img className="line-stroke" alt="Line stroke" src="img/line-2-stroke.svg" />
            </div>
            <div className="line-horizontal4">
                <img className="line" alt="Line" src="img/line-6.svg" />
            </div>
            <div className="box4-1">
                <div className="group">
                    <div className="text-wrapper">See More....</div>
                    <div className="div">
                        <img className="arrow-down-sign-to" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                        <div className="text-wrapper-2">CATEGORIES</div>
                    </div>
                    <div className="group-2">
                        <img className="img" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                        <div className="text-wrapper-3">Vegetables</div>
                        <div className="group-3" />
                    </div>
                    <div className="group-4">
                        <img className="arrow-down-sign-to-2" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                        <div className="text-wrapper-3">Fruits</div>
                        <img className="vegetable" alt="Vegetable" src="vegetable-1.png" />
                    </div>
                    <div className="group-5">
                        <img className="img" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                        <div className="text-wrapper-3">Whole Grains</div>
                        <div className="group-6" />
                    </div>
                    <div className="group-7">
                        <img className="img" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                        <div className="text-wrapper-3">Lean Protein</div>
                        <div className="group-8" />
                    </div>
                    <div className="group-9">
                        <img className="img" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                        <div className="text-wrapper-3">Water</div>
                        <div className="group-10" />
                    </div>
                    <div className="group-11">
                        <img className="arrow-down-sign-to-3" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                        <div className="text-wrapper-4">Low-Fat Dairy</div>
                        <div className="group-12" />
                    </div>
                    <div className="group-13">
                        <img className="arrow-down-sign-to-4" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                        <div className="text-wrapper-5">Healthy Fats</div>
                        <div className="group-14" />
                    </div>
                </div>
            </div>
        </div>
    );
};




export default SideBar;

if (document.getElementById('side-bar')) {
    const Index = ReactDOM.createRoot(document.getElementById("side-bar"));

    Index.render(
        <React.StrictMode>
            <SideBar/>
        </React.StrictMode>
    )
}
