<?php  require 'Aux.php'?>
<script src='https://unpkg.com/react-router-dom@5.0.0/umd/react-router-dom.min.js'></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script  type="text/babel">

class Slide extends React.Component{
    render(){
        return(
    <Aux>
        <div id="slider">
            <div class="slides">
                <div class="slider">
                <figure className="wgh-slider-item-figure">
                <div class="legend"></div>
                <div class="content">
                    <div class="content-txt">
                    
                   
                    </div>
                </div>
                <figcaption className="wgh-slider-item-figure__caption"> <a href="/library">
                    <div className="aupair-link">
                    Good Design to buy.
                    </div>
                    </a> <br /><a href="/library">  <span style={{color:'white'}}>READ MORE<i class="fa fa-external-link" aria-hidden="true"></i></span> </a></figcaption>
                </figure>
                
                <div class="image">
                    <img src="https://cdn.pixabay.com/photo/2016/01/19/17/53/writing-1149962_960_720.jpg" alt="pic1"/>
                </div>
                </div>
                <div class="slider">
                <figure className="wgh-slider-item-figure">
                    <div class="legend"></div>
                    <div class="content">
                    <div class="content-txt">
                    </div>
                    </div>
                    <div class="image">
                        <img src="https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501_960_720.jpg" alt="pic2"/>
                    </div>
                    <figcaption className="wgh-slider-item-figure__caption"> <a href="/aupair">
                    <div className="aupair-link">
                    New house to buy at Kacyiru.
                    </div>
                    </a> <br /><a href="/library">  <span style={{color:'white'}}>READ MORE<i class="fa fa-external-link" aria-hidden="true"></i></span> </a></figcaption>
                </figure>
               
                </div>
                <div className="slider">
                <figure className="wgh-slider-item-figure">
                <div class="legend"></div>
                <div class="content">
                <div class="content-txt">
                   
                    </div>
                </div>
                <div className="image">
                    <img src="https://cdn.pixabay.com/photo/2016/03/09/09/22/meeting-1245776_960_720.jpg" alt="pic3"/>
                </div>
                <figcaption className="wgh-slider-item-figure__caption"> <a href="/library">
                    <div className="aupair-link">
                    Rent this office at Kimironko.
                    </div>
                    </a> <br /><a href="/library">  <span style={{color:'white'}}>READ MORE<i class="fa fa-external-link" aria-hidden="true"></i></span> </a></figcaption>
                </figure>
                </div>            
            </div>
            </div>
        </Aux>
        )
    }
}
</script>