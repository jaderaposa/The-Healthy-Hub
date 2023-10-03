import React from "react";
import ReactDOM from 'react-dom/client'; 

export const ProfileBox = () => {
    return (
        <div className="profile-box">
            <div className="image">
                <img className="img" alt="Image" src="img/image-9.png" />
            </div>
            <div className="image1">
                <img className="image-gallery" alt="Image gallery" src="img/image-gallery-1.png" />
            </div>
            <div className="image3">
                <img className="setting" alt="Setting" src="img/setting-1.png" />
            </div>
            <div className="box2">
                <img className="ellipse" alt="Ellipse" src="img/ellipsee1.png" />
            </div>
            <div className="box3">
                <div className="group">
                    <div className="overlap">
                        <div className="div">
                            <div className="text-wrapper">&nbsp;•&nbsp;</div>
                            <div className="element-hrs-ago">&nbsp;&nbsp;5 hrs ago</div>
                            <div className="text-wrapper-2">thh.u/jaderaposa</div>
                        </div>
                        <div className="overlap-group-wrapper">
                            <div className="overlap-group">
                                <p className="p">doing my mock-up in figma&nbsp;</p>
                                <img
                                className="illustration-bitcoin"
                                alt="Illustration bitcoin"
                                src="img/illustration-bitcoin-cash-money.png"
                                />
                            </div>
                        </div>
                    </div>
                    <div className="overlap-2">
                        <div className="text-wrapper-3">Jade Raposa</div>
                        <div className="group-2">
                            <div className="text-wrapper-4">Vegetarian</div>
                            <img className="vegetarian-mark" alt="Vegetarian mark" src="img/vegetarian-mark.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div className="box4">
                <img className="line" alt="Line" src="img/line-11.svg" />
            </div>
            <div className="box">
                <div className="image" />
            </div>
            <div className="box5">
                <div className="group">
                    <div className="overlap-group">
                        <div className="rectangle" />
                        <div className="div">
                            <div className="text-wrapper">Cake Day</div>
                            <div className="text-wrapper-2">February 19, 2017</div>
                        </div>
                        <div className="group-2">
                            <div className="group-3">
                                <div className="text-wrapper-3">Verified Email</div>
                                <img className="img" alt="Icon verified" src="img/icon-verified.png" />
                            </div>
                            <div className="text-wrapper-4">Trophies</div>
                            <div className="group-4">
                                <img className="icon-numeric" alt="Icon numeric" src="img/icon-numeric-6-circle-outline.png" />
                                <div className="text-wrapper-5">Six-Year-Club</div>
                            </div>
                        </div>
                        <div className="group-5">
                            <div className="text-wrapper-6">Followers</div>
                            <div className="text-wrapper-7">1.8 M</div>
                        </div>
                        <div className="group-6">
                            <div className="text-wrapper-8">Following</div>
                            <div className="text-wrapper-9">1</div>
                        </div>
                        <div className="group-7">
                            <div className="text-wrapper-10">Social Media</div>
                            <div className="group-8">
                                <a
                                    className="text-wrapper-11"
                                    href="https://www.facebook.com/jadedajade/"
                                    rel="noopener noreferrer"
                                    target="_blank"
                                >
                                    https://www.facebook.com/jadedajade/
                                </a>
                                <img className="img" alt="Icon facebook" src="img/icon-facebook.png" />
                            </div>
                            <div className="group-9">
                                <a
                                    className="text-wrapper-12"
                                    href="https://www.instagram.com/toojadedforeverything/"
                                    rel="noopener noreferrer"
                                    target="_blank"
                                >
                                    https://www.instagram.com/toojadedforeverything/
                                </a>
                                <img className="img" alt="Icon instagram fill" src="img/icon-instagram-fill.png" />
                            </div>
                            <div className="group-10">
                                <a
                                    className="text-wrapper-13"
                                    href="https://twitter.com/mvut_AQW"
                                    rel="noopener noreferrer"
                                    target="_blank"
                                >
                                    https://twitter.com/mvut_AQW
                                </a>
                                <img className="icon-instagram-fill" alt="Icon instagram fill" src="img/icon-twitter-fill.png" />
                            </div>
                            <div className="group-11">
                                <a
                                    className="text-wrapper-14"
                                    href="https://github.com/jaderaposa"
                                    rel="noopener noreferrer"
                                    target="_blank"
                                >
                                    https://github.com/jaderaposa
                                </a>
                                <img className="img" alt="Icon github" src="img/icon-github.png" />
                            </div>
                        </div>
                    </div>
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
