import React from "react";
import ReactDOM from 'react-dom/client'; 

export const ProfileBox = () => {
    return (
        <div className="profile-box">
            <div className="group">
                <div className="overlap">
                    <img className="ellipse" alt="Ellipse" src="ellipse-1.png" />
                    <div className="thh-u-jaderaposa">thh.u/jaderaposa&nbsp;&nbsp;•&nbsp;&nbsp;5 hrs ago</div>
                    <img className="setting" alt="Setting" src="setting-1.png" />
                    <img className="image-gallery" alt="Image gallery" src="image-gallery-1.png" />
                    <div className="overlap-group">
                        <div className="rectangle" />
                        <div className="div">
                            <div className="text-wrapper">Verified Email</div>
                            <img className="img" alt="Icon verified" src="icon-verified.png" />
                        </div>
                        <div className="text-wrapper-2">Social Media</div>
                        <div className="text-wrapper-3">Trophies</div>
                        <div className="group-2">
                            <div className="text-wrapper-4">Cake Day</div>
                            <div className="text-wrapper-5">February 19, 2017</div>
                        </div>
                        <div className="group-3">
                            <img className="icon-numeric" alt="Icon numeric" src="icon-numeric-6-circle-outline.png" />
                            <div className="text-wrapper-6">Six-Year-Club</div>
                        </div>
                        <div className="group-4">
                            <div className="text-wrapper-7">Followers</div>
                            <div className="text-wrapper-8">1.8 M</div>
                        </div>
                        <div className="group-5">
                            <div className="text-wrapper-9">Following</div>
                            <div className="text-wrapper-10">1</div>
                        </div>
                        <div className="group-6">
                            <a
                                className="text-wrapper-11"
                                href="https://www.facebook.com/jadedajade/"
                                rel="noopener noreferrer"
                                target="_blank"
                            >
                                https://www.facebook.com/jadedajade/
                            </a>
                            <img className="img" alt="Icon facebook" src="icon-facebook.png" />
                        </div>
                        <div className="group-7">
                            <a
                                className="text-wrapper-12"
                                href="https://www.instagram.com/toojadedforeverything/"
                                rel="noopener noreferrer"
                                target="_blank"
                            >
                                https://www.instagram.com/toojadedforeverything/
                            </a>
                            <img className="img" alt="Icon instagram fill" src="icon-instagram-fill.png" />
                        </div>
                        <div className="group-8">
                            <a
                                className="text-wrapper-13"
                                href="https://twitter.com/mvut_AQW"
                                rel="noopener noreferrer"
                                target="_blank"
                            >
                                https://twitter.com/mvut_AQW
                            </a>
                            <img className="icon-instagram-fill" alt="Icon instagram fill" src="image.png" />
                        </div>
                        <div className="group-9">
                            <a
                                className="text-wrapper-14"
                                href="https://github.com/jaderaposa"
                                rel="noopener noreferrer"
                                target="_blank"
                            >
                                https://github.com/jaderaposa
                            </a>
                            <img className="img" alt="Icon github" src="icon-github.png" />
                        </div>
                    </div>
                    <div className="overlap-group-wrapper">
                        <div className="overlap-group-2">
                            <div className="text-wrapper-15">Jade Raposa</div>
                            <div className="group-10">
                                <div className="text-wrapper-16">Vegetarian</div>
                                <img className="vegetarian-mark" alt="Vegetarian mark" src="vegetarian-mark.png" />
                            </div>
                        </div>
                    </div>
                    <div className="overlap-wrapper">
                        <div className="overlap-2">
                            <p className="p">doing my mock-up in figma</p>
                            <img
                                className="illustration-bitcoin"
                                alt="Illustration bitcoin"
                                src="illustration-bitcoin-cash-money.png"
                            />
                        </div>
                    </div>
                    <img className="line" alt="Line" src="line-11.svg" />
                </div>
            </div>
        </div>
    );
};


export default ProfileBox;

if (document.getElementById('profile-box')) {
  const Index = ReactDOM.createRoot(document.getElementById("profile-box"));

  Index.render(
      <React.StrictMode>
          <ProfileBox/>
      </React.StrictMode>
  )
}
