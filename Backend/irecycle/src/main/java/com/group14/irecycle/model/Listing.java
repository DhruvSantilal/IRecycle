package com.group14.irecycle.model;

import javax.persistence.FetchType;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;

public class Listing {
	
	@ManyToOne(fetch = FetchType.LAZY)
	@JoinColumn(name = "user")
	private User user;
}
