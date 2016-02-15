require 'robot_arm'
robot_arm:load_level('exercise 6')
robot_arm.speed = 0.95
getal = 3
 for i = 1, 7 do
  robot_arm:move_right()
end
for y = 1, 8 do
robot_arm:grab()
robot_arm:move_right()
robot_arm:drop()
robot_arm:move_left()
robot_arm:move_left()
end