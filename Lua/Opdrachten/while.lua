require 'robot_arm'
robot_arm: random_level(1)
robot_arm.speed = 0.9
move = true

while move == true do
  robot_arm:grab()
  color = robot_arm:scan()
  print(color)
    if color == nil then
        move = false
    else
      robot_arm:move_right()
      robot_arm:drop()
      robot_arm:move_left()
    end
end
