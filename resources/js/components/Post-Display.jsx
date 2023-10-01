import React from "react";
import ReactDOM from 'react-dom/client'; 

export const PostDisplay = () => {
    return (
        <div class="post-display">
            <div class="group">
                <img class="image" src="img/image-8.png" />
                <div class="div">
                    <a href=""><img class="ellipse" src="img/funny-food.png" /></a>
                    <p class="text-wrapper">tth/FunnyFoods • 8 hrs ago</p>
                    <a href=""><img class="ellipsis" src="img/ellipsis.png" /></a>
                    <a href=""><img class="close" src="img/close.png" /></a>
                </div>
            </div>
        </div>
    );
};



export default PostDisplay;

if (document.getElementById('post-display')) {
  const Index = ReactDOM.createRoot(document.getElementById("post-display"));

  Index.render(
      <React.StrictMode>
          <PostDisplay/>
      </React.StrictMode>
  )
}
