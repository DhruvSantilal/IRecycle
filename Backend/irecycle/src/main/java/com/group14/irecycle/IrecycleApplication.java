package com.group14.irecycle;

import java.time.LocalDate;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;
import org.springframework.data.jpa.repository.config.EnableJpaAuditing;

import com.group14.irecycle.model.Listing;
import com.group14.irecycle.model.User;
import com.group14.irecycle.repository.ListingRepository;
import com.group14.irecycle.repository.UserRepository;

@SpringBootApplication
@EnableJpaAuditing
public class IrecycleApplication {
	
	//injects repositories
	@Autowired 
	private UserRepository userRepository;
	
	@Autowired
	private ListingRepository listingRepository;

	public static void main(String[] args) {
		SpringApplication.run(IrecycleApplication.class, args);

	}

	@Bean
	CommandLineRunner runner(){
		userRepository.deleteAll();
		listingRepository.deleteAll();
		return args -> {
			// password is 'password'
			// field order: email, password, forename, surname, phone, date, address, role
			User user1 = new User("rjshuttleworth24@gmail.com", 
					"$2a$10$2A1.jl.CRgaCmuJaUTOG5ebKbTGNXkGEesP/UqaMsw5/IUWw7JWBO", 
					"Robert", 
					"Shuttleworth", 
					"07498530519", 
					LocalDate.of(1111, 11, 30),
					"Brunel University, Uxbridge, UB8 3PH",
					"ADMIN");
			userRepository.save(user1);
			//field order: name, description, user 
			listingRepository.save(new Listing("Bicycle", "5 years old, good condition", user1));
			listingRepository.save(new Listing("Wardrobe", "2m x 1m x 1m, oak", user1));
		};
	}
}