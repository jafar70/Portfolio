/*  ==========================================================================
    Scroll effects
    ========================================================================== */
		const effectsInit = function (effects, context) {
			if (!effects) {
				return;
			}
		
			effects.forEach(function (val) {
				const waypoints = new Waypoint({
					element: val,
					handler: function (direction) {
						if (direction === "down") {
							val.classList.add("effect--ready");
						}
					},
					context: context,
					offset: "92%"
				});
			});
		}; // effectsInit();
		
		setTimeout(function () {
			const effects = document.querySelectorAll(".effect");
		
			effectsInit(effects, window);
		}, 200);
		
		