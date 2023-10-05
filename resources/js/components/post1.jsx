import React from "react";
import ReactDOM from 'react-dom/client'; 

export const Post1 = () => {
    return (
        <div class="post1">
            <div class="group">
                <div class="overlap">
                    <div class="text-wrapper">Pinned by Moderators</div>
                    <img class="pin" src="img/pin-1.png" />
                    <p class="lorem-ipsum-dolor">
                        &#34;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        <br />labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco<br />
                        laboris nisi ut aliquip ex ea commodo consequat. &#34;
                    </p>
                    <div class="thumbs-up-and-down">
                        <div class="div">143</div>
                        <img class="thumbs-up" src="img/thumbs-up.png" />
                        <img class="thumbs-down" src="img/thumbs-down.png" />
                    </div>
                    <div class="group-2">
                        <div class="overlap-group">
                            <div class="group-3">
                                <div class="text-wrapper-2">Comments</div>
                                <img class="img" src="img/chat-bubble.png" />
                            </div>
                            <div class="overlap-group-wrapper">
                                <div class="overlap-group-2">
                                    <div class="text-wrapper-3">Award</div>
                                    <img class="warranty" src="img/warranty.png" />
                                </div>
                            </div>
                            <div class="overlap-wrapper">
                                <div class="overlap-2">
                                    <div class="text-wrapper-4">Save</div>
                                    <img class="img" src="img/bookmark.png" />
                                </div>
                            </div>
                            <div class="div-wrapper">
                                <div class="overlap-3">
                                    <div class="text-wrapper-5">Share</div>
                                    <img class="img" src="img/share.png" />
                                </div>
                            </div>
                        </div>
                        <img class="ellipsis" src="img/ellipsiss.png" />
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Post1;

if (document.getElementById('post1')) {
  const Index = ReactDOM.createRoot(document.getElementById("post1"));

  Index.render(
      <React.StrictMode>
          <Post1/>
      </React.StrictMode>
  )
}