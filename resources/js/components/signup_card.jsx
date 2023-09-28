import React from 'react';
import ReactDOM from 'react-dom/client';


export const SignUpCard = () => {
    return (
        <div className="signup-card">
            <div className="group">
                <div className="overlap">
                    <img className="user" alt="User" src="img/user-112-512-1.png" />
                    <div className="div">Sign Up</div>
                    <input className="div-wrapper" placeholder='Username'>
                    </input>
                    <input className="overlap-2" placeholder='Password'>
                    </input>
                    <input className="overlap-group" placeholder='Confirm Password'>
                    </input>
                    <div className="overlap-group-wrapper">
                        <div className="overlap-group-2">
                            <div className="text-wrapper-3">Enter</div>
                        </div>
                    </div>
                    <div className="text-wrapper-2">Back</div>
                </div>
            </div>
        </div>
    );
};


export default SignUpCard;

if (document.getElementById('signup-card')) {
    const Index = ReactDOM.createRoot(document.getElementById('signup-card'));

    Index.render(
        <React.StrictMode>
            <SignUpCard/>
        </React.StrictMode>
    )
}
