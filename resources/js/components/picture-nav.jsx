import React from "react";
import ReactDOM from 'react-dom/client'; 

export const PictureNav = () => {
  return (
        <div className="pic-nav">
            <div className="group">
                <div className="overlap-group">
                    <p className="text-wrapper">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac neque a nulla suscipit tincidunt. Sed non
                        arcu nec augue iaculis luctus. Pellentesque ac tortor in libero consectetur tincidunt.
                    </p>
                </div>
            </div>
        </div>
    );
};
    
    

export default PictureNav;

if (document.getElementById('pic-nav')) {
  const Index = ReactDOM.createRoot(document.getElementById("pic-nav"));

  Index.render(
      <React.StrictMode>
          <PictureNav/>
      </React.StrictMode>
  )
}
