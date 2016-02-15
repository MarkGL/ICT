require 'robot_arm'
robot_arm:load_level('exercise 4')
robot_arm.speed = 0.85
for i = 1, 3 do
robot_arm:grab()
robot_arm:move_right()
robot_arm:drop()
robot_arm:move_left()
end