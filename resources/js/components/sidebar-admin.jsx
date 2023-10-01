import React from 'react';
import ReactDOM from 'react-dom/client';;

export const SideBarAdmin = () => {
    return (
        <div>
            <div className="box4">
                <div className="group">
                    <div className="div">
                        <img className="house-chimney" alt="House chimney" src="img/house-chimney-1.png" />
                        <div className="text-wrapper">Home</div>
                    </div>
                    <div className="div">
                        <img className="fire-flame-curved" alt="Fire flame curved" src="img/fire-flame-curved-1-1.png" />
                        <div className="text-wrapper">Popular</div>
                    </div>
                    <div className="div">
                        <img className="fire-flame-curved" alt="Fire flame curved" src="img/control-panel.png" />
                        <div className="text-wrapper">Dashboard</div>
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
                        <img className="group-3" src='img/vegetables-2.png' />
                    </div>
                    <div className="group-4">
                        <img className="arrow-down-sign-to-2" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                        <div className="text-wrapper-3">Fruits</div>
                        <img className="vegetable" alt="Vegetable" src="img/vegetable-1.png" />
                    </div>
                    <div className="group-5">
                        <img className="img" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                        <div className="text-wrapper-3">Whole Grains</div>
                        <img className="group-6" src='img/bread-1.png' />
                    </div>
                    <div className="group-7">
                        <img className="img" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />   
                        <div className="text-wrapper-3">Lean Protein</div>
                        <img className="group-8" src='img/protein-1.png'/>
                    </div>
                    <div className="group-9">
                        <img className="img" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                        <div className="text-wrapper-3">Water</div>
                        <img className="group-10" src='img/water.png'/>
                    </div>
                    <div className="group-11">
                        <img className="arrow-down-sign-to-3" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                        <div className="text-wrapper-4">Low-Fat Dairy</div>
                        <img className="group-12" src='img/dairy-products-1.png' />
                    </div>
                    <div className="group-13">
                        <img className="arrow-down-sign-to-4" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                        <div className="text-wrapper-5">Healthy Fats</div>
                        <img className="group-14" src='img/nutrition-1.png'/>
                    </div>
                </div>
            </div>
            <div className="line-horizontal4">
                <img className="line" alt="Line" src="img/line-6.svg" />
            </div>
            <div className="box4-2">
                <div className="group">
                    <div className="div">
                        <div className="text-wrapper-2">RESOURCES</div>
                        <img className="arrow-down-sign-to" alt="Arrow down sign to" src="img/arrow-down-sign-to-navigate.png" />
                    </div>
                    <div className="group-5">
                        <div className="text-wrapper-4 gray">About The Healthy Hub</div>
                        <img className="about" alt="About" src="img/about.png" />
                    </div>
                    <div className="group-2">
                        <div className="text-wrapper-3 gray">Advertise</div>
                        <img className="group-3" src="img/laptop-1.png" />
                    </div>
                    <div className="group-4">
                        <div className="text-wrapper-4 gray">Help</div>
                        <img className="help" alt="Help" src="img/help-1.png" />
                    </div>
                    <div   div className="text-wrapper">See More....</div>
                </div>
            </div>
        </div>
    );
};


export default SideBarAdmin;

if (document.getElementById('side-bar-admin')) {
    const Index = ReactDOM.createRoot(document.getElementById("side-bar-admin"));

    Index.render(
        <React.StrictMode>
            <SideBarAdmin/>
        </React.StrictMode>
    )
}
