import React from "react";
import ReactDOM from 'react-dom/client'; 

export const CreateInput = () => {
    return (
        <div className="create-input">
            <div className="group">
                <div className="overlap-group">
                    <div className="overlap">
                        <div className="text-wrapper">Create Post</div>
                    </div>
                    <img className="account" alt="Account" src="img/account-1.png" />
                    <img className="link" alt="Link" src="img/link-1.png" />
                    <div className="ellipse" alt="Ellipse" />
                </div>
            </div>
        </div>
    );
};


export default CreateInput;

if (document.getElementById('create-input')) {
  const Index = ReactDOM.createRoot(document.getElementById("create-input"));

  Index.render(
      <React.StrictMode>
          <CreateInput/>
      </React.StrictMode>
  )
}
