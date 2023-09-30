import React from "react";
import ReactDOM from 'react-dom/client'; 

export const PostCreate = () => {
    return (
        <div className="post-create">
            <div className="group">
                <div>
                    <img className="add" alt="Add" src="img/add-1-1.png" />
                    <div className="text-wrapper">Create a post</div>
                </div>
                <div className="divider">
                    <div>
                        <div className="text-wrapper-2">Home</div>
                        <img className="play" alt="Play" src="img/play-1.png" />
                    </div>
                    <div>
                        <div className="div">Philippines</div>
                        <img className="img" alt="Play" src="img/play-1.png" />
                    </div>
                    <img className="fullscreen" alt="Fullscreen" src="img/fullscreen-1.png" />
                </div>
            </div>
        </div>
    );
};



export default PostCreate;

if (document.getElementById('post-create')) {
  const Index = ReactDOM.createRoot(document.getElementById("post-create"));

  Index.render(
      <React.StrictMode>
          <PostCreate/>
      </React.StrictMode>
  )
}
