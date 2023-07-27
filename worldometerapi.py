#!/usr/bin/env python3
import worldometer

current_deaths = worldometer.deaths_today().get("deaths_today")

print(current_deaths)