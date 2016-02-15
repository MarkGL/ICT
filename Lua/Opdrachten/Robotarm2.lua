require 'robot_arm'
robot_arm:load_level('exercise 2')
robot_arm.speed = 0.85
for i = 1, 7 do
robot_arm:move_right()
end
robot_arm:grab()
robot_arm:move_right()
robot_arm:move_right()
robot_arm:drop()
for a = 1, 9 do
  robot_arm:move_left()
end
robot_arm:grab()
for o = 1, 9 do 
robot_arm:move_right()
end
robot_arm:drop()
  for e = 1, 5 do
  robot_arm:move_left()
  end
robot_arm:grab()
for e = 1,5 do
  robot_arm:move_right()
end
robot_arm:drop()