package com.group14.irecycle;

import java.sql.Date;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;
import org.springframework.data.jpa.repository.config.EnableJpaAuditing;

import com.group14.irecycle.model.User;
import com.group14.irecycle.repository.UserRepository;

@SpringBootApplication
@EnableJpaAuditing
public class IrecycleApplication {
	//injects repositories
	@Autowired 
	private UserRepository userRepository;

	public static void main(String[] args) {
		SpringApplication.run(IrecycleApplication.class, args);

	}

	@Bean
	CommandLineRunner runner(){
		return args -> {
			userRepository.save(new User("rjshuttleworth24@gmail.com", "password", "Robert", "Shuttleworth", "07498530519", Date.valueOf("1111-11-11")));
		};
	}
}