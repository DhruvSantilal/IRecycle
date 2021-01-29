package com.group14.irecycle.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.group14.irecycle.model.Listing;
import com.group14.irecycle.repository.ListingRepository;

@RestController
public class ListingController {
	@Autowired
	private ListingRepository listingRepository;

	@RequestMapping("/listings")
	public Iterable<Listing> getUsers() {
		return listingRepository.findAll();
	}
}
