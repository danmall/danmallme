var Navigation = {

    _events: {},

    addEventListener: function(event, func) {
        if (!this._events[event]) {
            this._events[event] = [];
        }
        this._events[event].push(func);
    },

    dispatchEvent: function(event) {
        if (!this._events[event]) {
            return;
        }
        for (n in this._events[event]) {
            this._events[event][n]();
        }
        delete this._events[event];
    }
};

var Animation = function(selector, states) {

    var DEFAULT_DELAY = 500;

    var $selector = $(selector);

    var _current = null;

    var _states = Object.keys(states);

    var _timer;

    return {
        set: function(state) {
            $selector.css(states[state].changes);
            _current = state;
        },

        transition: function(changes, options) {
            options = options || {};
            $selector.animate(changes, options);
        },

        start: function(state) {
            this.set(state);
            this.run();
        },

        run: function() {
            var self = this;
            var nextState = this.next();

            if (nextState) {
                _timer = setTimeout(
                    function() {
                        Navigation.dispatchEvent(selector + '.' + _current + '.in');
                        self.transition(nextState.changes);
                        Navigation.dispatchEvent(selector + '.' + _current + '.out');
                        self.run();
                    },
                    nextState.delay
                );
            }
        },

        next: function() {
            var _next;

            for (var i = 0; i < _states.length; i++) {
                if (_states[i] == _current && _states[i + 1]) {
                    _next = _states[i + 1];
                    break;
                }
            }
            var nextState = states[_next];

            if (!nextState) {
                return null;
            }
            nextState.delay = nextState.delay || DEFAULT_DELAY;
            _current = _next;
            return nextState;
        },

        stop: function() {
            clearTimeout(_timer);
        }
    };
};

$(document).ready(function() {
    var Objects = {
    
        masthead: new Animation("#masthead", {
            INIT: {
                delay: 0,
                changes: {
                    position: "absolute",
                    top: "50%",
                    marginTop: "-100px",
                    opacity: 0
                }
            },
            IN_START: { delay: 0, changes: {} },
            IN: {
                changes: {
                    opacity: 1
                }
            },
            OUT_START: { delay: 0, changes: {} },
            OUT: {
                changes: {
                    top: "0%",
                    marginTop: "0px"
                }
            }
        }),
    
        hairline: new Animation("#hairline", {
            INIT: {
                changes: {
                    width: "0px"
                }
            },
            IN_START: { delay: 0, changes: {} },
            IN: {
                changes: {
                    width: "500px"
                }
            },
            OUT_START: { delay: 0, changes: {} },
            OUT: { delay: 0, changes: {} }
        })
    };

    Navigation.addEventListener("#masthead.IN_START.in", function() {
        Objects.masthead.stop();
        Objects.hairline.start('INIT');
    });

    Navigation.addEventListener("#hairline.IN.out", function() {
        Objects.masthead.run();
    });

    Objects.masthead.start('INIT');

});
