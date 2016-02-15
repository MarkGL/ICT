require "gui"

local window = gui.create_window()
window.title = "Timer Demo"

local label = window:add_label()
label.text = "Look at me go!"

local timer = gui.create_timer()
timer.interval = 0.02
timer:start()

local speed = 50

function timer:on_tick(delta_time)
  label.x = label.x + speed * delta_time
end

gui.run()