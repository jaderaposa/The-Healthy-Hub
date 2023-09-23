import React from 'react';
import ReactDOM from 'react-dom/client';

export const LogInSignUp = () => {
    return (
        <div className="box2">
            <div className="group">
                <a className="overlap-group-wrapper">
                    <div className="overlap-group">
                        <div className="text-wrapper">Sign Up</div>
                    </div>
                </a>
                <a className="overlap-wrapper">
                    <div className="overlap-group">
                        <div className="text-wrapper">Log In</div>
                    </div>
                </a>
            </div>
        </div>
        );
    };

export default LogInSignUp;

if (document.getElementById('lisu')) {
    const Index = ReactDOM.createRoot(document.getElementById("lisu"));

    Index.render(
        <React.StrictMode>
            <LogInSignUp/>
        </React.StrictMode>
    )
}
