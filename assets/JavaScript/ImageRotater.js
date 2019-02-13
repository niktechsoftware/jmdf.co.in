function slideShow() {
    this.slides = $('#slideshow > *');
    this.count = this.slides.length - 1;
    this.initslide = 0;
    this.auto = null;
    this.ActivateAuto();
};

slideShow.prototype.nextSlide = function () {
    this.initslide = (this.initslide++ >= this.count) ? 0 : this.initslide++;
    this.animateSlide();
};

slideShow.prototype.animateSlide = function () {
    var currentSlide = this.initslide;
    var nextSlide = ((currentSlide + 1) > this.count) ? 0 : currentSlide + 1;
    var prevSlide = ((currentSlide - 1) < 0) ? this.count - 1 : currentSlide - 1;

    $('#slideshow > *').removeClass().not($('#slideshow > *').filter(function (index) {
        return index === currentSlide || index === nextSlide || index === prevSlide;
    })).addClass('left');
    $('#slideshow > *:eq(' + prevSlide + ')').addClass('right');
    $('#slideshow > *:eq(' + nextSlide + ')').addClass('right');
    $('#slideshow > *:eq(' + currentSlide + ')').addClass('front');
};

slideShow.prototype.ActivateAuto = function () {
    var that = this;
    this.animateSlide();
    var timmer = 0;
    this.auto = window.setInterval(function () {
        var currentSlide = that.initslide;
	if (currentSlide == 0 && timmer == 5) {
            that.nextSlide();
        }
        else if (currentSlide == 1 && timmer == 10) {
            that.nextSlide();
        }
        else if (currentSlide == 2 && timmer == 15) {
            that.nextSlide();
	    timmer = 0;
        }
        //alert("currentSlide" + currentSlide);
        //if (currentSlide == 0 && timmer == 90) {
            //that.nextSlide();
        //}
        //else if (currentSlide == 1 && timmer == 105) {
            //that.nextSlide();
        //}
        //else if (currentSlide == 2 && timmer == 120) {
            //that.nextSlide();
        //}
        //else if (currentSlide == 3 && timmer == 135) {
        //    that.nextSlide();
        //    timmer = 0;
        //}
        timmer = timmer + 1;
        //alert("Timer="+timmer);
    }, 1000);
};